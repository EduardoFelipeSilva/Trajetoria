import java.util.*;
public class Triangulo {
	
			public static void main(String[] args) {
				Scanner ler = new Scanner (System.in);
				double a, b, c;
				
				System.out.print("Digite o primeiro valor:");
				a = ler.nextDouble();
				System.out.print("Digite o segundo valor:");
				b = ler.nextDouble();
				System.out.print("Digite o terceiro valor:");
				c = ler.nextDouble();
				
				if (a>b+c || b>a+c || c>b+a) {
					System.out.println("Não é triangulo");
				} else if (a == b & b == c) {
					System.out.println("Este triangulo é Equilátero!");
				} else if ( a != b & b!= c & a!= c ) {
					System.out.println("Este triangulo é  Escaleno!");
				} else {
					System.out.println("Este triangulo é Isósceles!");
				}
				ler.close();
			}
		}
