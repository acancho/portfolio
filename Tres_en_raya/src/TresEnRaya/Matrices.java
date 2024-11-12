/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package TresEnRaya;

/**
 *
 * @author FP
 */
public class Matrices {

    public static void main(String[] args) {

        String[][] tablero = new String[3][3];
        int count = 1;
        for (int i = 0; i < tablero.length; i++) {
            for (int j = 0; j < tablero[i].length; j++) {
                tablero[i][j] = String.valueOf(count);
                count++;
            }
        }
        for (int i = 0; i < tablero.length; i++) {
            for (int j = 0; j < tablero[i].length; j++) {
                System.out.print(tablero[i][j] + "");
                count++;
            }
            System.out.println("");
        }

        int counts = 1;
        for (int i = 0; i < tablero.length; i++) {
            for (int j = 0; j < tablero[i].length; j++) {
                tablero[j][i] = String.valueOf(counts);
                count++;
            }
        }
        for (int i = 0; i < tablero.length; i++) {
            for (int j = 0; j < tablero[i].length; j++) {
                System.out.print(tablero[i][j] + "");
                count++;
            }
            System.out.println("");
            
            
                
                
            }
        }
    }



