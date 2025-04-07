import java.util.Scanner;
public class Exercicio2 {

				public static void main (String []args) {
					Scanner ler = new Scanner (System.in);
					int[][]a = new int [3] [3];
					int par=0, impar=0;
					double conta; 
					
					System.out.print("Digite o Nº de sua Matriz: ");
					
					for (int i=0; i <=2; i++) {
						for (int j=0; j<=2; j++) {
							a[i][j] = ler.nextInt();
								conta = a[i][j] % 2;
								 if (conta != 0) {
							        	impar++;
							        } else {
							            par++;
							        }
						}
					}

					System.out.println("Tem "+impar +" Numeros Impares");
					System.out.println("Tem "+par +" Numeros pares");

					ler.close();
						}						
					
		}
