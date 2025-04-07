import java.util.*;
public class integracao {
	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		int s;
		double r, n;
		
		n = in.nextDouble();
		r = (n*600)/2000;
	
		r = r + 0.9; 
		s = (int) r;
		System.out.println(+s);
		in.close();
		}
}
