import java.util.Scanner;
public class Primo {
	
	    public static void main(String[] args) {
	        Scanner in = new Scanner(System.in);
		int i = 1, n;
		double resultado;

	        System.out.print("Digite um n�mero inteiro: ");
	        n = in.nextInt();
	       resultado = n;

	        while (resultado > 0) {
	            resultado = n % (n - i);
	            i++;
	        }
	        if (i != n) {
	                     System.out.println("N�o � primo");
	        } else {
	            System.out.println("� primo");
	        }
	        in.close();
	    }
	    
	}
