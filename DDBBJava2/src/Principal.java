
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
import java.sql.*;
import java.util.Scanner;
import javax.swing.JOptionPane;

/**
 *
 * @author FP
 */
public class Principal {

    public static void main(String[] args) throws SQLException {
        Scanner teclado = new Scanner(System.in);
        Connection con = null;
        con = DriverManager.getConnection("jdbc:mysql://localhost:3306/pedidos", "root", "1234");
        System.out.println("Conexsion correcta");

        //Sentencias directas SQL
        Statement sql = con.createStatement();
        //execute()
        sql.execute("create database if not exists Jurasic");
        System.out.println("execute correcto");

        Connection conJurasic = DriverManager.getConnection("jdbc:mysql://localhost:3306/Jurasic", "root", "1234");
        System.out.println("Conexsion correcta con Jurasic");

        sql = conJurasic.createStatement();
        sql.execute("create table if not exists Fitness("
                + "Nombre varchar(45),"
                + "Ejercicio varchar(255),"
                + "Intensidad int"
                + ")");
        System.out.println("tabla Fitness creada");

//        sql.executeUpdate("Insert into Fitness "
//        + "values('Lucia','Sentadillas',5)");
//        
//        System.out.println("registro creado");
//       // update, instensidad se pasa a  10
//        sql.executeUpdate("update Fitness "
//                + "set Intensidad = 10 "
//                + "where Intensidad = 5");
//        
//        System.out.println("registro actualizado");
////        //Delete, borramos a quien haga sentadilla
//        sql.executeUpdate("delete from fitness "
//                + "where ejercicio ='Sentadillas'");
////        
//        System.out.println("registro borrado");
//            ResultSet salidaSelect = sql.executeQuery("Select * from Fitness");
//            while(salidaSelect.next()){
//                //vamos dia a dia
//                System.out.print(salidaSelect.getString("nombre"));  
//               System.out.print( " - "+salidaSelect.getInt(3));
//                System.out.println(" - "+ salidaSelect.getString("Ejercicio"));
//                System.out.println("");
//            }
//    ResultSet salidaSelect = sql.executeQuery("Select * from Fitness");
//             while(salidaSelect.next()){
//                 if (salidaSelect.getInt(3)==5) {
//                    System.out.print(salidaSelect.getString("nombre"));  
//                System.out.print( " - "+salidaSelect.getInt(3));
//                System.out.println(" - "+ salidaSelect.getString("Ejercicio"));
//                System.out.println("");
//                 }
//
//                
//            }
//
//    
        PreparedStatement sqlPreparada = null;

////executeUpdate---------------------------------------------------------------------------------------------------
//        String sqlUpdate = "Update fitness set intensidad= ?";
//        Scanner teclado = new Scanner(System.in);
//        sqlPreparada = conJurasic.prepareStatement(sqlUpdate);
//        System.out.println("dime la intensidad del ejercicio");
//        int intensidad = teclado.nextInt();
//        sqlPreparada.setInt(1, intensidad);
        //insercion insert-------------------------------------------------------------------------------------------
        //Pedimos dos valores (nombre, ejercicio, intensidad
//        String sqlInsert = "Insert into fitness values=(?,?,?)";
//        Scanner teclado = new Scanner(System.in);
//        sqlPreparada = conJurasic.prepareStatement(sqlInsert);
//        String nombre = JOptionPane.showInputDialog("Dame el nombre del deportista");
//        sqlPreparada.setString(1, nombre);
//        String ejercicio = JOptionPane.showInputDialog("Dame el ejercicio");
//        sqlPreparada.setString(2, ejercicio);
//        int intensidad = Integer.parseInt(JOptionPane.showInputDialog("Dime la intensidad"));
//        sqlPreparada.setInt(3, intensidad);
//        System.out.println(nombre + " " + ejercicio + " " + intensidad);
//        sqlPreparada.executeUpdate();
        //borrar delete----------------------------------------------------------------------------------------------
//        String sqlDelete = "delete from fitness where nombre=? and intensidad = ?";
//        sqlPreparada = conJurasic.prepareStatement(sqlDelete);
//        String nombre = JOptionPane.showInputDialog("Dame el nombre del deportista");
//        sqlPreparada.setString(1, nombre);
//        int intensidad = Integer.parseInt(JOptionPane.showInputDialog("Dime la intensidad"));
//        sqlPreparada.setInt(3, intensidad);
//
//        sqlPreparada.executeUpdate();
        //selecionar select-----------------------------------------------------------------------------------------
//String sqlselect= "select * from fitness where ejercicio = ?";
//sqlPreparada = conJurasic.prepareStatement(sqlselect);
//String ejercicio = JOptionPane.showInputDialog("select - intensidad");
//sqlPreparada.setString(2, ejercicio);
//ResultSet salida = sqlPreparada.executeQuery("nombre");
//while(salida.next()){
//    System.out.println("nombre" + salida.getString(ejercicio));
//    
//}


    }
}
