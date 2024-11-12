/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package TresEnRaya;

/**
 *
 * @author FP
 */
public class Prueba {
    public static void main(String[] args) {
        Tablero t= new Tablero();
        t.iniciarTablero();
        t.vissualizar();
        t.ponerFicha(0, 0);
        System.out.println(t.getRonda());
        t.ponerFicha(1, 1);
        System.out.println(t.getRonda());
        t.ponerFicha(0, 0);
        System.out.println(t.getRonda());
        t.vissualizar();
        
    }
}
