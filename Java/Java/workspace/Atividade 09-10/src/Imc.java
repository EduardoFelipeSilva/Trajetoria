import java.util.*;
public class Imc {

		public static void main(String[] args) {
			Scanner ler = new Scanner (System.in);
			double imc, p, a;
			
			System.out.print("Digite seu peso");
			p = ler.nextDouble();
			System.out.print("Digite o sua altura");
			a = ler.nextDouble();
			imc = p / (a*a); 
			
			
			if (imc <= 18.5) {
				System.out.println("Voce esta com excesso de magreza e seu imc é = "+imc );
			} else if (imc < 25){
				System.out.println("Voce esta com peso normal e seu imc é = "+imc);
				} else if (imc < 30) {
					System.out.println("Voce esta com excesso de peso e seu imc é = "+imc);
					} else if (imc <35){
						System.out.println("Voce esta com obesidade (grau 1) e seu imc é = "+imc);
						} else if (imc <40){
							System.out.println("Voce esta com obesidade (grau 2) e seu imc é = "+imc);
						} else {
							System.out.println("Voce esta com obesidade (grau 3) e seu imc é = "+imc);
					}
			ler.close();
		}
	}