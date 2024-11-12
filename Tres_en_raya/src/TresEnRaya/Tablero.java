/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package TresEnRaya;

import java.util.Arrays;

/**
 *
 * @author FP
 */
public class Tablero {

    private String[][] matriz;
    private boolean turno;
    private int ronda;

    public int getRonda() {
        return ronda;
    }

    public void setRonda(int ronda) {
        this.ronda = ronda;
    }

    public Tablero(String[][] matriz, boolean turno) {
        this.matriz = matriz;
        this.turno = turno;

    }

    public Tablero() {
        this.matriz = new String[3][3];
        this.turno = false;
        ronda = 0;
    }

    public String[][] getMatriz() {
        return matriz;
    }

    public void setMatriz(String[][] matriz) {
        this.matriz = matriz;
    }

    public boolean geTurno() {
        return turno;
    }

    public void setTurno(boolean turno) {
        this.turno = turno;
    }

    public void iniciarTablero() {
        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                matriz[i][j] = "-";
            }
        }
    }

    public void ponerFicha(int fila, int columna) {
        String ficha;
        if (turno) {
            ficha = "X";
        } else {
            ficha = "O";
        }
        if (matriz[fila][columna].equalsIgnoreCase("-")) {
            matriz[fila][columna] = ficha;
            turno = !turno;
            ronda++;
        }

    }

    public boolean haGanado(String ficha) {
        int cont = 0;
        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                if (matriz[j][i].equalsIgnoreCase(ficha)) {
                    cont++;
                }
            }
            if (cont == 3) {
                return true;
            }

        }
        cont = 0;
        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                if (matriz[i][j].equalsIgnoreCase(ficha)) {
                    cont++;
                }
            }

            if (cont == 3) {
                return true;
            }
        }
        cont = 0;
        int tam = matriz.length - 1;
        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                if (matriz[i][tam - i].equalsIgnoreCase(ficha)) {
                    cont++;
                }
            }
        }
        if (cont == 3) {
            return true;
        } else {
            return false;
        }

    }

    public void vissualizar() {
        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                System.out.print(matriz[i][j] + "");
            }
            System.out.println("");
        }
        System.out.println("");
    }

}
