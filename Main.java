package com.company;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
	Scanner input = new Scanner(System.in);
	int KCSEgrade;
	int confidence;
	int interview;

	System.out.println("Please enter KCSE grades: ");
	KCSEgrade = input.nextInt();

    System.out.println("Please enter confidence score: ");
    confidence = input.nextInt();

    System.out.println("Please enter interview score: ");
    interview = input.nextInt();

        if (KCSEgrade >= 65 && confidence >= 6 || interview >= 5)
            System.out.println("Admitted");
        else if(KCSEgrade < 65 && confidence < 6 || interview < 5)
            System.out.println("Denied");

    }
}
