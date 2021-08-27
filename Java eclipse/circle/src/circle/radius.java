package circle;
import java.util.Scanner;

public class radius {
	public static void main(String[]args){
		System.out.print("enter a radius of a circle");
		Scanner imput = new Scanner(System.in);
		double radius = imput.nextDouble();
		
		 double a = 2* Math.PI * radius;
		 double b = Math.PI *radius *radius ;
		 System.out.println(" the area is " );
		 System.out.println(b);
		 System.out.println(" the circumfrence is ");
		 System.out.print(a);
		 
		
		
		
		
		
		
		
		
	}

}
