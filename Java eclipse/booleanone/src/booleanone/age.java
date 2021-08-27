package booleanone;
import java.util.Scanner;
public class age {

	public static void main(String[] args){

		  /* 
		  1ask the question of age
		  2answer stored in boolean
		  3pass to int
		  4display
		  */
		  boolean age;
		  String pass ;
		  Scanner input=new Scanner(System.in);
		  System.out.print("are YOU above 18 : true/false ");
		  age= input.nextBoolean();
		  pass = age? "you are A GROWN UP " : " YOU ARE A CHILD ";
		  
		  
		  System.out.print(pass);
	} 
		  
}
