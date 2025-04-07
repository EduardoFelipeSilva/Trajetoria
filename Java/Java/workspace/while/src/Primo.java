import java.util.Scanner;
public class Primo {
	
	    public static void main(String[] args) {
	        Scanner in = new Scanner(System.in);
		int i = 1, n;
		double resultado;

	        System.out.print("Digite um número inteiro: ");
	        n = in.nextInt();
	       resultado = n;

	        while (resultado > 0) {
	            resultado = n % (n - i);
	            i++;
	        }
	        if (i != n) {
	                     System.out.println("Não é primo");
	        } else {
	            System.out.println("É primo");
	        }
	        in.close();
	    }
	    
	}
