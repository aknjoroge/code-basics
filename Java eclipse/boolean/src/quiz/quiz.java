package quiz;
import java.util.Scanner;

public class quiz {
public static void main(String[]args){
	String name,heshe;
	int age;
	double mark;
	boolean gender;
	Scanner input =new Scanner(System.in);
	System.out.println("hallo what is your name");
	name=input.nextLine();
	System.out.println("Enter your age");
	age=input.nextInt();
	System.out.println("enter your marks");
	mark=input.nextDouble();
	System.out.println("are you female or male?=true or false");
	gender =input.nextBoolean();
	heshe=gender ? "she":"he";
	
	System.out.print("hi ");
	System.out.print( name);
	System.out.print(" you are ");
	System.out.print(age);
	System.out.print(" years old and you are a ");
	System.out.print(heshe);
	System.out.print(" and have ");
	System.out.print(mark);
	System.out.print(" marks ");
	System.out.print("hi"+name);
	
	
	
	
	
}
}
