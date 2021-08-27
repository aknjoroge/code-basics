package simple;
import java.util.Scanner;

public class simpleinterest {
public static void main(String[]args){
	double r,p,t,a,R1;
	Scanner input = new Scanner(System.in);
	System.out.println("Hallo");
	System.out.println("lets calculate simple interest");
	System.out.println("enter amount of principle");
	p = input.nextDouble();
	System.out.println("Now enter rate 0f calculation");
	r = input.nextDouble();
	R1 = r/100; 
	System.out.println("Now enter time to take with the loan");
	t = input.nextDouble();
	System.out.println("the SI amount is ");
	System.out.print(interest(p,R1,t));
	

	
	
	
	
}

public static double interest(double principle,double rate,double time   ){
	
	return principle * (1 + rate*time);
	
	
}



}
