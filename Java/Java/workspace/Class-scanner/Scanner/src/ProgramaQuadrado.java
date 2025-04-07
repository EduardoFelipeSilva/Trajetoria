import java.util.Scanner; 
public class ProgramaQuadrado {
		public static void main(String[] args) {
			Scanner ler = new Scanner(System.in);
			double a, b, c, quadrado;
			System.out.println("Digite o primeiro valor:");
			a = ler.nextDouble();
			System.out.println("Digite o segundo valor:");
			b = ler.nextDouble();
			System.out.println("Digite o terceito valor:");
			c = ler.nextDouble();
			quadrado = a*a+b*b+c*c;
			System.out.println("A soma do quadrado é:" +quadrado);
		}
}
