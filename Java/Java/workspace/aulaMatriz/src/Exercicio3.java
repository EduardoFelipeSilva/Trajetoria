import java.util.Scanner;
public class Exercicio3 {
	public static void main (String []args) {
		Scanner ler = new Scanner (System.in);
		int[][]a = new int [3] [3];
		int par=0, impar=0;
		double conta; 
		
		System.out.print("Digite o N� de sua Matriz: ");
		
		for (int i=0; i <=2; i++) {
			for (int j=0; j<=2; j++) {
				a[i][j] = ler.nextInt();
			}
		}
		 System.out.print("Os numeros impares s�o:" );
		 System.out.println();
		 System.out.print("a[] = [");
					 for (int i=0; i <=2; i++) {
							for (int j=0; j<=2; j++) {
									conta = a[i][j] % 2;
									 if (conta != 0) {
								        	impar++;
								        	System.out.print(+a[i][j] + "  ");
								        	
								        } else {
								        }	
									 	 
			}
							
							
		}
					 System.out.print("]");
					 System.out.println();
					 System.out.print("Os numeros pares s�o:" );
					 System.out.println();
					 System.out.print("a[] = [");
					 for (int i=0; i <=2; i++) {
						 
							for (int j=0; j<=2; j++) {
									conta = a[i][j] % 2;
									 if (conta == 0) {
										 par++;
										 System.out.print(+a[i][j] + " ");
										 
										 
								        	
								        } else {
								        }
									 
							}
							
								
					 }
					 System.out.print("]");
					 System.out.println();
					 System.out.println("Tem "+impar +" Numeros impar");
				       
			        	System.out.println("Tem "+par +" Numeros pares");
			        	
			        	System.out.println("As posi��es dos numeros Pares s�o");
			        	
			        	 for (int i=0; i <=2; i++) {
							 
								for (int j=0; j<=2; j++) {
										conta = a[i][j] % 2;
										 if (conta == 0) {
											 par++;
											 System.out.print(" ["+i+"]"+"["+j +"]" +" ");
											 
											 
									        	
									        } else {
									        	
									        }
										 
								}
															
					        	 
			}
			        	 System.out.println();
							System.out.println("As posi��es dos numeros Impares s�o");
			        	 
			         	 for (int i=0; i<=2; i++) {  
							 
								for (int j=0; j<=2; j++) {
										conta = a[i][j] % 2;
										 if (conta != 0) {
											 par++;
											 System.out.print(" ["+i+"]"+"["+j +"]" +" ");
											 
											 
									        	
									        } else {
									        }
										 
								}
						
			        	 }
			        	 ler.close();
			        	 
	}
	
		
}
