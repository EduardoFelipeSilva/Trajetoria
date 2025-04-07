import java.util.Scanner;
public class Emprestimo {
	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double valorEmprestado, parcelas, juros, valorParcelas, valorFinal; 
		
		System.out.println("Digite o valor do emprestimo:");
		valorEmprestado = ler.nextDouble();
		System.out.println("Digite o numero de parcelas:");
		parcelas = ler.nextDouble();
		
		juros = (valorEmprestado*2.5/100);
		valorParcelas = (valorEmprestado+juros);
		valorFinal = (valorParcelas*parcelas);
		
		System.out.println("O valor de suas parcelas são:" +valorParcelas);
		System.out.println("O valor total do emprestimo é:"+valorFinal);
		ler.close();
		
	}

	public static void main(String[] args) {
		valorFinal <- valorParcelas * parcelas)
	}

}
