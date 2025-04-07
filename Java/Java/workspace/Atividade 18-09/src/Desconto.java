import java.util.Scanner;
public class Desconto {
	public static void main(String[] args ) {
		Scanner ler = new Scanner(System.in);
		double p,d,novoValor,valorFinal;
		
		System.out.println("Digite o preço do produto:");
		p = ler.nextDouble();
		System.out.println("Digite a Porcetagem do desconto do produto:");
		d = ler.nextDouble();
		
		novoValor = (d*p/100);
		valorFinal = (p-novoValor);
		
		System.out.println("O valor final do seu produto é:" +valorFinal);
		ler.close();
		
	}

}