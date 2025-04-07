import java.util.Scanner;
public class media {

	public static void main(String[] args) {
	Scanner in = new Scanner (System.in);
		
		final int TAM = 5; 
		
		int a[], b[], i, soma = 0, maior;
		
		a= new int [TAM];
		
		for (i=0; i<TAM; i++) { 
			System.out.println("Digite o "+(i+1)+" valor:");
			a[i] = in.nextInt(); 
			
			b[i] = a[i] + a[i+1];
		}
		System.out.print(+b[i]);
		}
	}
