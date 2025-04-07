import java.util.Scanner;
public class Algarismos {
	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int numero, primeiroNumero, segundoNumero, terceiroNumero; 
		
		System.out.println("Digite o numero composto por tres algarismo:");
		numero = ler.nextInt();
		
		primeiroNumero = numero/100;
		segundoNumero = numero/10 -(primeiroNumero*10);
	    terceiroNumero = numero-primeiroNumero*100-segundoNumero*10;
		
		System.out.println("O primeiro algarismo é:" +primeiroNumero);
		System.out.println("O seguhndo algarismo é:" +segundoNumero);
		System.out.println("O terceiro algarismo é:" +terceiroNumero);
		ler.close();
	}

}
