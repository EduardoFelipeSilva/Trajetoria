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
					System.out.println("Voc� esta Reprovado e sua m�dia �:"+m);
				} else if (m >= 6){
					System.out.println("Voc� esta Aprovado e sua m�dia �:"+m );
					} else {
						System.out.println("Coloque sua nota de exame:");
						exame = ler.nextDouble();
						m2 = (exame+m)/2 ;
						
						if ( m2 >= 6){					
								System.out.println("Voc� esta aprovado e sua m�dia �:"+m2);
						} else {
								System.out.println("Voc� esta reprovado e sua m�dia �:"+m2);
						}
				}
				ler.close();
			}
		}