/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package all_classes;

import java.sql.Connection;
import java.sql.DriverManager;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author user
 */
public class get {
    Connection con=null;
    public Connection connection()
    {
        try{
            Class.forName("com.mysql.jdbc.Driver");
            con=(Connection) DriverManager.getConnection("jdbc:mysql://localhost/cms", "root", "");
        }catch(Exception ex){
            Logger.getLogger(get.class.getName()).log(Level.SEVERE, null, ex);
        }
        return con;
    }
    
}
