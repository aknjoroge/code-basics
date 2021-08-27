package matrix;
import java.util.Scanner;
public class matrix {
	
	public static void main(String[]args){
		Scanner input = new Scanner(System.in);
		int a, b ,c;
		int a1,b1,c1,d1;
		int [][] matrix = new int [ 2][2];
		System.out.println("enter matrix number");
		System.out.println(" enter row 1 col 1");
		a1 = input.nextInt();
		System.out.println("row 1 col 2");
		b1 = input.nextInt();
		System.out.println("row 2 col 1");
		c1 = input.nextInt();
		System.out.println("row 2 col 2");
		d1 = input.nextInt();
		
		matrix [0][0] = a1;
		matrix [0][1] = b1;
		matrix [1][0] = c1;
		matrix [1][1] = d1;
		
		
		
		
		a= matrix[0][0]+matrix[0][1];
		b=matrix [1][0]+matrix[1][1];
		c= matrix [0][0]+matrix[0][1]+matrix [1][0]+matrix[1][1];
		System.out.println("the above matrix looks like this");
		System.out.print("(");
		System.out.print( matrix[0][0] );
		System.out.print("-");
		System.out.print( matrix[0][1] );
		System.out.println(")");
		System.out.print("(");
		System.out.print( matrix[1][0]);
		System.out.print("-");
		System.out.print(  matrix[1][1] );
		System.out.println(")");
	
		
		
		System.out.println("lets find sum of elements in the matrix");
		
		System.out.print("the uper row sum is ");
		System.out.println( a);
		System.out.print("the lower row sum is ");
		System.out.println( b);
		System.out.print("total sum of elements in the matrix is ");
		System.out.println(c);
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	

}
