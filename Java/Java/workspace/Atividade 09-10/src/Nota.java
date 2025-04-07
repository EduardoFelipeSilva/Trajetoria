import java.util.*;
public class Nota {

			public static void main(String[] args) {
				Scanner ler = new Scanner (System.in);
				double n1, n2, m, exame, m2;
				
				System.out.print("Digite primeira Nota:");
				n1 = ler.nextDouble();
				System.out.print("Digite segunda Nota:");
				n2 = ler.nextDouble();
				m =(n1+n2)/2;
			
				if (m < 3) {
					System.out.println("Você esta Reprovado e sua média é:"+m);
				} else if (m >= 6){
					System.out.println("Você esta Aprovado e sua média é:"+m );
					} else {
						System.out.println("Coloque sua nota de exame:");
						exame = ler.nextDouble();
						m2 = (exame+m)/2 ;
						
						if ( m2 >= 6){					
								System.out.println("Você esta aprovado e sua média é:"+m2);
						} else {
								System.out.println("Você esta reprovado e sua média é:"+m2);
						}
				}
				ler.close();
			}
		}