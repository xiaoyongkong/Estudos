package br.com.capgov.roupas.factory;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class ConexaoBanco {

	public static Connection createConnection() throws SQLException {
		
		String url = "jdbc:mysql://localhost:3306/fes";
		String user = "root";
		String password = "";
		
		Connection conexao = DriverManager.getConnection(url, user, password);		
				
		return conexao;
		
	}
}