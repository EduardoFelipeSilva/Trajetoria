import java.util.Scanner; 
public class ProgramaMesesAno { 
    public static void main(String[] args) { 
        Scanner ler = new Scanner(System.in);
        int d, m, a; 
        
        String dias; 
        System.out.println("Digite o número de dias:");
        d = ler.nextInt();
        
        m = d/30; 
        a = m/12; 
        
        System.out.println("Meses e Ano:" +m +a); 
        ler.close(); 
    }
}
