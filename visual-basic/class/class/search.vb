Imports System.Data.OleDb
Imports System.Drawing
Imports System.Drawing.Image

Imports iTextSharp.text
Imports iTextSharp.text.pdf
Imports System.IO





Public Class search


    Dim provider As String = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source="

    Dim datafile As String = "|DataDirectory|\studentdatabase.accdb"
    Dim constring As String = provider & datafile
    Dim myconnection As OleDbConnection = New OleDbConnection
    Dim str As String
    Dim i As Integer
    Dim state As String
    Dim id As Integer

    Private Sub search_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click

        Try
            myconnection.ConnectionString = constring
            myconnection.Open()

            str = "Select * from students WHERE studentID = " & CInt(idsearch.Text)
            Dim cmd As OleDbCommand = New OleDbCommand(str, myconnection)
            cmd.Connection = myconnection
            cmd.CommandText = str
            Dim datatable As New DataTable
            Dim databaseadapter As New OleDb.OleDbDataAdapter
            databaseadapter.SelectCommand = cmd

            databaseadapter.Fill(datatable)

            'WHERE TO DISPLAY
            searchgrid.DataSource = datatable
            myconnection.Close()

        Catch ex As Exception
            MsgBox(ex.Message)
        End Try
    End Sub

    Private Sub LinkLabel1_LinkClicked(ByVal sender As System.Object, ByVal e As System.Windows.Forms.LinkLabelLinkClickedEventArgs) Handles LinkLabel1.LinkClicked
        Me.Hide()


    End Sub

    Private Sub LinkLabel2_LinkClicked(ByVal sender As System.Object, ByVal e As System.Windows.Forms.LinkLabelLinkClickedEventArgs) Handles LinkLabel2.LinkClicked

        Try

            Dim pdfTable As New PdfPTable(searchgrid.ColumnCount)
            pdfTable.DefaultCell.Padding = 3
            pdfTable.WidthPercentage = 90
            pdfTable.HorizontalAlignment = Element.ALIGN_LEFT
            pdfTable.DefaultCell.BorderWidth = 2

            'Adding Header row
            For Each column As DataGridViewColumn In searchgrid.Columns
                Dim cell As New PdfPCell(New Phrase(column.HeaderText))
                'cell.BackgroundColor = New iTextSharp.text.BaseColor(240, 240, 240)
                pdfTable.AddCell(cell)
            Next

            'Adding DataRow
            For Each row As DataGridViewRow In searchgrid.Rows
                For Each cell As DataGridViewCell In row.Cells
                    pdfTable.AddCell(cell.Value.ToString())
                Next
            Next

            'Exporting to PDF
            Dim folderPath As String = "E:\database.pdf"
            If Not Directory.Exists(folderPath) Then
                Directory.CreateDirectory(folderPath)
            End If
            Using stream As New FileStream(folderPath & "DataGridViewExport.pdf", FileMode.Create)
                Dim pdfDoc As New Document(PageSize.A4, 40, 40, 40, 20)
                PdfWriter.GetInstance(pdfDoc, stream)
                pdfDoc.Open()


                Dim logo As Drawing.Image = Drawing.Image.FromFile("E:\Media\Images\etc\screenshot\logo.png", False)


                Dim para As New Paragraph("TRANSCRIPT")
                Dim pharse As New Phrase("Student Result")
                Dim chunk_ As New Chunk("This is my first chunk")

                'will add logo image
                pdfDoc.Add(para)
                pdfDoc.Add(pharse)
                pdfDoc.Add(chunk_)

                pdfDoc.Add(pdfTable)

               


                pdfDoc.Close()
                stream.Close()
            End Using


        Catch ex As Exception
            MsgBox(ex.Message)

        End Try
        



    End Sub
End Class