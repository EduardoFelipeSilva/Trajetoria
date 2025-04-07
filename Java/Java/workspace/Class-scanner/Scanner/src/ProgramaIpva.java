import java.util.Scanner; 
public class ProgramaIpva { 
    public static void main(String[] args) {
        Scanner ler = new Scanner (System.in);
        double veiculo, ipva, valor; 
        
        String veiculo;
        System.out.println("Digite o valor de seu veiculo:");
        veiculo = ler.nextDouble(); 
        System.out.println("Digite o preço atual do ipva:");
        ipva = ler.nextDouble(); 
        
        valor = (ipva*veiculo)/100; 
        
        System.out.println("O valor de seu ipva é:" +valor);
        ler.close();
    }
}

