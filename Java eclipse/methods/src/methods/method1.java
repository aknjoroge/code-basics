package methods;

import java.util.Scanner;

public class method1 {
	
	
    public static void main(String []args){
    	Scanner imput = new Scanner(System.in);
   int a, b, enter;
System.out.println("First step lets calculate  area and perimeter");
System.out.println("of a rectangle");
System.out.println("now ENTER length of the rectangel");
 a = imput.nextInt();
 System.out.println("ENTER width of the rectanle");
 b = imput.nextInt();

System.out.println("Here are the results ");

System.out.print(" the AREA is  ");
System.out.println(area(a,b));
System.out.print("the length is ");
System.out.println(perimeter(a,b));
System.out.println("enter O to continue");
enter = imput.nextInt();
double radius;
System.out.println("Now lets calculate area of a circle");
System.out.println("Now");
System.out.println("enter  radius of the circle");
radius = imput.nextDouble();
double c= Math.PI * radius* radius;
System.out.println("Here are the results ");
System.out.println("area is");
System.out.println(c);
double d = 2*Math.PI* radius;
System.out.println("circumfrence is is");
System.out.println(d);



    }
public static int area(int length,int width){
    return  length * width;
}
public static  int perimeter(int length,int width){
    return  length + width;
}




}
