import java.sql.SQLException;

public class Main {
	
	public static void main(String[] args) throws SQLException {
		ConexaoBanco conexao = new ConexaoBanco();
		conexao.createConnection();
		
		System.out.println("Conectado ao Banco");
		
		conexao.createConnection().close();
	}
}
