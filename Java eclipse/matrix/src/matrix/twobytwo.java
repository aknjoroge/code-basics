package matrix;

public class twobytwo {
	public static void main(String[]args){
		int a, b ,c;
		int [][] matrix = new int [ 2][2];
		matrix[0][0]=2;
		matrix[0][1]=3;
		matrix[1][0]=5;
		matrix[1][1]=8;
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
