package truefalse;
import java.util.Scanner;
public class compare {
	public static void main(String[]args)
	{
		Scanner input =new Scanner(System.in);
		int a ,b;
		System.out.println("enter value of A");
		a= input.nextInt();
		System.out.println("enter value of B");
		b= input.nextInt();
		System.out.println(" is a greater than b =" +(a > b) );
		System.out.println(" is a less than b =" +(a < b) );
		System.out.println(" is a equal to than b =" +(a == b) );
		System.out.println(" is a not equal to b =" + (a != b) );
		
		
		
		
		
	}
	
}
