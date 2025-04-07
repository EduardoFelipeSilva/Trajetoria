import java.util.*;
public class televisao {
	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		int pol;
		Double l, h;
		
		
		l = in.nextDouble(); 
		h = in.nextDouble();
		
		l = l*100; 
		h = h*100;
		
		pol = (int) (l*l + h*h); 
		System.out.println(+pol+" pol");

	}
}
	
