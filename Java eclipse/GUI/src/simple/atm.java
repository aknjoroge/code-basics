package simple;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.util.Calendar;
import java.util.GregorianCalendar;
import java.awt.event.ActionEvent;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Color;
import java.awt.Point;
import javax.swing.JTextArea;

public class atm {

	private JFrame frame;
	private JTextArea txtMain;
	JLabel lblNewLabel_1, lblNewLabel;
	JPanel panel;
	double balanceone=0.0,balancetwo=0.0;
	//JButton button_5, button_6,button_7,button_8,button_9,button_10,button_11,button_12,button_13;
	String state="lock";
	String power ="off";
	 String lastlogone, lastlogtwo;
	JLabel lblLine;
	String currentuser="non";
	String globnumber,globpin;
	
	JButton btnNewButton,btnLoan,btnNewButton_1,btnWithdraw,btnDeposit,btnBalance;
	JButton button_5,button_6,button_7,button_8,button_9,button_10,button_11,button_12,button_13,button_14;
	JLabel lblNewLabel_2 , lblNewLabel_3 ,lblNewLabel_4;
	private JPanel panel_1;
	private JButton btnNewButton_3;
	private JButton btnOk;

	/**
	 * Launch the application.
	 */
	
	private void checkcredential() {
		try {
			String accountnumberone ="123";
			String accountone = "alexander K.N";
			String nametone = "Mr.alex";
			String emailtone = "alex@techkey.co.ke";
			String passone="12345";
			
			String accountnumbertwo ="321";
			String accounttwo = "john prosor";
			String emailttwo = "john@icloud.com";
			String namettwo = "Mr.john";
			String passtwo="54321";
			
			
			if(globpin.equals(passone)&& globnumber.equals(accountnumberone)  ) {
				
				Calendar tt = new GregorianCalendar();
				currentuser="one";

		        int hr = tt.get(0);
		        int min = tt.get(12);
		        int sc = tt.get(13);
		         lastlogone= hr+":"+min+":"+sc+".";
		        
				
				entersystem();
				lblNewLabel_2.setText(accountone);
				lblNewLabel_3.setText(emailtone);
				
			
				state="logedin";
				txtMain.setText("Welcome : "+nametone +"\n Balance is : "+balanceone+"\n Last login in time :" +lastlogone );
				//account one
			}else if( globpin.equals(passtwo)&& globnumber.equals(accountnumbertwo) ) {
				//account two
				Calendar tt = new GregorianCalendar();
				currentuser="two";

		        int hr = tt.get(0);
		        int min = tt.get(12);
		        int sc = tt.get(13);
		         lastlogtwo= hr+":"+min+":"+sc+".";
		        
				entersystem();
				lblNewLabel_2.setText(accounttwo);
				lblNewLabel_3.setText(emailttwo);
				state="logedin";
				
				txtMain.setText("Welcome : "+namettwo +"\n"+" Balance is : "+balancetwo+"\nLast login in time :" +lastlogtwo);
				
				
				
			}else {
				txtMain.setText("no account");
				//no account
			}
		}catch(Exception e) {
			System.out.println("");
		}
		
		
		// TODO Auto-generated method stub
		
	}

	private void entersystem() {
		
		lblNewLabel_2.setVisible(true);
		lblNewLabel_3.setVisible(true);
		
		// TODO Auto-generated method stub
		
	}
	
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					atm window = new atm();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public atm() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(100, 100, 891, 537);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		 panel = new JPanel();
		panel.setBounds(0, 0, 875, 498);
		frame.getContentPane().add(panel);
		panel.setLayout(null);
		
		 lblNewLabel_2 = new JLabel("name");
		lblNewLabel_2.setBounds(143, 269, 46, 14);
		panel.add(lblNewLabel_2);
		
		 lblNewLabel_3 = new JLabel("email");
		lblNewLabel_3.setBounds(358, 269, 89, 14);
		panel.add(lblNewLabel_3);
		
		 lblNewLabel_4 = new JLabel("New label");
		lblNewLabel_4.setBounds(600, 269, 46, 14);
		panel.add(lblNewLabel_4);
		
		 lblNewLabel = new JLabel("time");
		lblNewLabel.setBounds(359, 45, 127, 14);
		panel.add(lblNewLabel);
		
		 lblNewLabel_1 = new JLabel("line");
		lblNewLabel_1.setBounds(143, 70, 546, 14);
		panel.add(lblNewLabel_1);
		
		txtMain = new JTextArea();
		txtMain.setBorder(null);
		txtMain.setLocation(new Point(89, 0));
		txtMain.setText("hi");
		txtMain.setBounds(228, 95, 365, 127);
		panel.add(txtMain);
		
		txtMain.setColumns(10);
		
		 lblLine = new JLabel("line");
		lblLine.setBounds(143, 244, 546, 14);
		panel.add(lblLine);
		
		
		
		 btnNewButton = new JButton("ON");
		 btnNewButton.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		power="on";
		 		state="lock";
		 		checkpower();
		 	
		 	}

			
		 });
		btnNewButton.setBounds(23, 45, 89, 47);
		panel.add(btnNewButton);
		
		 btnDeposit = new JButton("DEPOSIT");
		 btnDeposit.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("logedin")) {
		 			state="deposit";
		 			txtMain.setText(null);
			 		//txtMain.setText("Enter amount to Deposit:\n");
		 		}
		 		else {
		 			
		 		}
		 		
		 		
		 	}
		 });
		btnDeposit.setBounds(23, 133, 99, 36);
		panel.add(btnDeposit);
		
		 btnWithdraw = new JButton("WITHDRAW");
		 btnWithdraw.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("logedin")) {
		 			state="withdraw";
			 		txtMain.setText(null);
		 		}
		 		else {
		 			
		 		}
		 		
		 	}
		 });
		btnWithdraw.setBounds(23, 194, 99, 37);
		panel.add(btnWithdraw);
		
		JButton btnOff = new JButton("OFF");
		btnOff.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				power="off";
				state="lock";
		 		checkpower();
				
			}
		});
		btnOff.setBounds(707, 32, 89, 47);
		panel.add(btnOff);
		
		 btnBalance = new JButton("BALANCE");
		 btnBalance.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		if(currentuser.equals("one")) {
		 			if(state.equals("logedin")) {
			 			state="balance";
				 		txtMain.setText("Current Balance is:" +balanceone);
			 		}
			 		else {
			 			
			 		}
		 		}
		 		else if(currentuser.equals("two")){
		 			
		 			if(state.equals("logedin")) {
			 			state="balance";
				 		txtMain.setText("Current Balance is:"+balancetwo);
			 		}
			 		else {
			 			
			 		}
		 			
		 		}
		 	
		 	}
		 });
		btnBalance.setBounds(707, 120, 99, 36);
		panel.add(btnBalance);
		
		 btnLoan = new JButton("LOAN");
		 btnLoan.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(currentuser.equals("one")) {
		 			if(state.equals("logedin")) {
			 			state="loan";
				 		txtMain.setText("You are not eligble to get a loan");
			 		}
			 		else {
			 			
			 		}
		 		}
		 		else if(currentuser.equals("two")){
		 			
		 			if(state.equals("logedin")) {
			 			state="loan";
				 		txtMain.setText("You are not eligble to get a loan");
			 		}
			 		else {
			 			
			 		}
		 			
		 		}
		 		
		 		
		 	}
		 });
		btnLoan.setBounds(707, 181, 99, 36);
		panel.add(btnLoan);
		
		 btnNewButton_1 = new JButton("1");
		 btnNewButton_1.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + btnNewButton_1.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + btnNewButton_1.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + btnNewButton_1.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + btnNewButton_1.getText();
		 			txtMain.setText(button);	
		 			
		 		}
		 		else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +btnNewButton_1.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +btnNewButton_1.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		
		 		
		 	
		 	}
		 });
		btnNewButton_1.setBounds(206, 311, 89, 36);
		panel.add(btnNewButton_1);
		
		 button_5 = new JButton("2");
		 button_5.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_5.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_5.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_5.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_5.getText();
		 			txtMain.setText(button);	
		 			
		 		}else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_5.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_5.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		
		 	}
		 });
		button_5.setBounds(331, 311, 89, 36);
		panel.add(button_5);
		
		
		 button_6 = new JButton("3");
		button_6.setBounds(446, 311, 89, 36);
		panel.add(button_6);
		
		button_6.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_6.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_6.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_6.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_6.getText();
		 			txtMain.setText(button);	
		 			
		 		}
		 		else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_6.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_6.getText();
		 			txtMain.setText(button);
		 		 
		 		}
				
				
			}
		});
		
		 button_7 = new JButton("4");
		button_7.setBounds(206, 358, 89, 31);
		panel.add(button_7);
		
		button_7.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_7.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_7.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_7.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_7.getText();
		 			txtMain.setText(button);	
		 			
		 		}
		 		else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_7.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_7.getText();
		 			txtMain.setText(button);
		 		 
		 		}
				
				
			}
		});
		
		 button_8 = new JButton("5");
		button_8.setBounds(331, 358, 89, 31);
		panel.add(button_8);
		
		button_8.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_8.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_8.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_8.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_8.getText();
		 			txtMain.setText(button);	
		 			
		 		}else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_8.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_8.getText();
		 			txtMain.setText(button);
		 		 
		 		}
				
			}
		});
		
		 button_9 = new JButton("6");
		button_9.setBounds(446, 358, 89, 27);
		panel.add(button_9);
		
		button_9.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_9.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_9.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_9.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_9.getText();
		 			txtMain.setText(button);	
		 			
		 		}
		 		else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_9.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_9.getText();
		 			txtMain.setText(button);
		 		 
		 		}
				
				
			}
		});

		 button_10 = new JButton("7");
		button_10.setBounds(206, 406, 89, 31);
		panel.add(button_10);
		
		button_10.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_10.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_10.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_10.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_10.getText();
		 			txtMain.setText(button);	
		 			
		 		}
		 		else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_10.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_10.getText();
		 			txtMain.setText(button);
		 		 
		 		}
				
				
			}
		});
		
		 button_11 = new JButton("8");
		button_11.setBounds(331, 406, 89, 31);
		panel.add(button_11);
		
		button_11.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_11.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_11.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_11.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_11.getText();
		 			txtMain.setText(button);	
		 			
		 		}
		 		else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_11.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_11.getText();
		 			txtMain.setText(button);
		 		 
		 		}
				
				
				
			}
		});
		
		 button_12 = new JButton("9");
		button_12.setBounds(446, 406, 89, 31);
		panel.add(button_12);
		button_12.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
				if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_12.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_12.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_12.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_12.getText();
		 			txtMain.setText(button);	
		 			
		 		}
		 		else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_12.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_12.getText();
		 			txtMain.setText(button);
		 		 
		 		}
				
				
			}
		});
		
		 button_13 = new JButton("0");
		button_13.setBounds(331, 448, 89, 31);
		panel.add(button_13);
		button_13.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
				if(state.equals("lock")) {
		 			//rub
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_13.getText();
		 			txtMain.setText(button);	
		 			
		 			state ="number";
		 			//display
		 			//state= number
		 		}else if(state.equals("number")) {
		 			//add to line
		 			String button = txtMain.getText() + button_13.getText();
		 			txtMain.setText(button);	
		 			
		 			
		 			
		 		}		 		
		 		else if(state.equals("pin")) {
		 			txtMain.setText(null);
		 			String button = txtMain.getText() + button_13.getText();
		 			txtMain.setText(button);	
		 			state ="inpin";
		 			//clear text
		 			//add text
		 			
		 		}
		 		else if(state.equals("inpin")) {
		 			
		 			String button = txtMain.getText() + button_13.getText();
		 			txtMain.setText(button);	
		 			
		 		}
		 		else if(state.equals("deposit")) {
		 			String button = txtMain.getText() +button_13.getText();
		 			txtMain.setText(button);
		 		 
		 		}
		 		else if(state.equals("withdraw")) {
		 			String button = txtMain.getText() +button_13.getText();
		 			txtMain.setText(button);
		 		 
		 		}
				
			}
		});
		
		btnOk = new JButton("ok");
		btnOk.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				if(state.equals("lock")) {
					
				}
				else if(state.equals("number")) {
					//store number and call for pin
					globnumber =txtMain.getText().toString();
					txtMain.setText(null);
					txtMain.setText("Enter pin code");
					state ="pin";

					//clear text
					//set text
					//set state =pin
					//call number correct method to as for 
					
		
				}
				else if(state.equals("pin")) {
					//strore pin 
					//check credentials
					//check ok /wrong
					//clear txt
					
				}
				else if(state.equals("inpin")) {
					
					globpin=txtMain.getText().toString();
					txtMain.setText(null);
					checkcredential();
					
				}
				else if(state.equals("logedin")) {
					
					
				}else if(state.equals("deposit")) {
					String person="balance"+currentuser;
					if(person.equals("balanceone")) {

						String dp=txtMain.getText().toString();
						double balanceperson=Double.parseDouble(dp);
						double add = balanceperson+balanceone;
						balanceone=add;
						
						txtMain.setText(null);
						String amount=String.valueOf(add);
						txtMain.setText("successfully deposited: "+dp);
						
						state="logedin";	
					}else if(person.equals("balancetwo")) {
						

						String dp=txtMain.getText().toString();
						double balanceperson=Double.parseDouble(dp);
						double add = balanceperson+balancetwo;
						balancetwo=add;
						//double data=Double.parseDouble(dp);
						String amount=String.valueOf(add);
						txtMain.setText(null);
						
						txtMain.setText("successfully deposited: "+dp);
						
						state="logedin";
					}else {
						
					}
					
					
				}
				else if(state.equals("withdraw")) {
					String person="balance"+currentuser;
					if(person.equals("balanceone")) {
						
						String dp=txtMain.getText().toString();
						double balanceperson=Double.parseDouble(dp);
						double minus = balanceone-balanceperson;
						balanceone=minus;
						//double data=Double.parseDouble(dp);
						String amount=String.valueOf(minus);
						txtMain.setText(null);
						txtMain.setText("successfully Withdrawn"+dp);
						state="logedin";
						
						
					}else if(person.equals("balancetwo")) {
						String dp=txtMain.getText().toString();
						double balanceperson=Double.parseDouble(dp);
						double minus = balancetwo-balanceperson;
						balancetwo=minus;
						//double data=Double.parseDouble(dp);
						String amount=String.valueOf(minus);
						txtMain.setText(null);
						txtMain.setText("successfully Withdrawn"+dp);
						state="logedin";
						
						
					}else {
						
					}
					
					
				}
				else if(state.equals("loan")) {
					
					checkcredential();
					
				}
				else if(state.equals("balance")){
					checkcredential();
				}
				
				
				
			}

		
		});
		btnOk.setBounds(579, 311, 89, 36);
		panel.add(btnOk);
		
		JButton btnPrint = new JButton("print");
		btnPrint.setBounds(590, 390, 89, 47);
		panel.add(btnPrint);
		
		JButton button_14 = new JButton("<");
		button_14.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				 if (txtMain.getText().length() > 0) {
		 	          StringBuilder one = new StringBuilder(txtMain.getText());
		 	          one.deleteCharAt(txtMain.getText().length() - 1);
		 	          String back = one.toString();
		 	         txtMain.setText(back);
		 	        }
				
			}
		});
		button_14.setBounds(46, 311, 89, 23);
		panel.add(button_14);
		
		panel_1 = new JPanel();
		panel_1.setBackground(Color.WHITE);
		panel_1.setBounds(136, 32, 553, 268);
		panel.add(panel_1);
		
		JButton btnNewButton_2 = new JButton("menu");
		btnNewButton_2.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				
				checkcredential();
	
				
				
			}
		});
		btnNewButton_2.setBounds(46, 362, 89, 47);
		panel.add(btnNewButton_2);
		
		btnNewButton_3 = new JButton("info");
		btnNewButton_3.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				   JFrame two = new JFrame();
				   JOptionPane.showMessageDialog(two, "Two users exits \n id one: 123 \n id two: 321 \n you know the passwords!");
				  
			}
		});
		btnNewButton_3.setBounds(796, 443, 69, 36);
		panel.add(btnNewButton_3);
		
		
		
		
		
		checkpower();
		
		
		
	}
	private void turnonatm() {
		
		Calendar tt = new GregorianCalendar();

        int hr = tt.get(0);
        int min = tt.get(12);
        int sc = tt.get(13);
        lblNewLabel_4.setText("Bank ATM");
        lblNewLabel.setText("Time :"+ hr+":"+min+":"+sc+".");
        lblNewLabel_1.setText("-------------------------------------------------------------------------------------------------------------------------------------------------------------");
        lblLine.setText("-----------------------------------------------------------------------------------------------------------------------------------------------------");
		
	}

	private void checkpower() {
		
		if(power.equals("off")) {
			lblNewLabel_2.setVisible(false);
			lblNewLabel.setVisible(false);
			lblNewLabel_1.setVisible(false);
			lblNewLabel_4.setVisible(false);
			lblLine.setVisible(false);
			txtMain.setVisible(false);
			lblNewLabel_3.setVisible(false);
			
			btnDeposit.setVisible(false);
			btnWithdraw.setVisible(false);
			btnLoan.setVisible(false);
			btnBalance.setVisible(false);
			
		}
		else if (power.equals("on")) {
			txtMain.setText("ENTER ACCOUNT NUMBER");
			lblNewLabel.setVisible(true);
			lblNewLabel_1.setVisible(true);
			lblNewLabel_4.setVisible(true);
			lblLine.setVisible(true);
			txtMain.setVisible(true);
			
			btnDeposit.setVisible(true);
			btnWithdraw.setVisible(true);
			btnLoan.setVisible(true);
			btnBalance.setVisible(true);
			
			lblNewLabel_2.setVisible(false);
			lblNewLabel_3.setVisible(false);
			
			
			turnonatm();
			
		}else {
			
		}
		
	}
}
