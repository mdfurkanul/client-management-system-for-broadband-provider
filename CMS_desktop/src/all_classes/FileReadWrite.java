/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package all_classes;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.Scanner;

public class FileReadWrite {
    public static void FileInput(String a,String url) throws IOException
    {
    File outFile = new File (url);
    FileWriter fWriter = new FileWriter (outFile);
    PrintWriter pWriter = new PrintWriter (fWriter);
    pWriter.print(a.trim());
    pWriter.close();
    }
    public static String FileOutput(String url) throws FileNotFoundException
    {
        File inFile = new File (url);
        Scanner in = new Scanner (inFile);
        String name = in.nextLine();
        in.close();
        return name;
    }
}
