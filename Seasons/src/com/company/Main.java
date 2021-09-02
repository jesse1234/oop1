package com.company;

public class Main {

    public static void main(String[] args) {
        // Get all years divisible by 4 and 20
        Years myFirstRange = new Years(1314, 2014);
        myFirstRange.setRangeType(1);
        myFirstRange.setFirstDivisor(4);
        myFirstRange.setSecondDivisor(20);

        // Get all leap years
        Years mySecondRange = new Years(1100, 3150);
        mySecondRange.setRangeType(2);
        mySecondRange.setFirstDivisor(4);
        mySecondRange.setSecondDivisor(400);

        // Get all Olympic years divisible by 3
        Years myThirdRange = new Years(1500, 3150);
        myThirdRange.setRangeType(3);
        myThirdRange.setFirstDivisor(3);
        myThirdRange.setSecondDivisor(4);

        System.out.println("List all years divisible by " + myFirstRange.getFirstDivisor() + " and " + myFirstRange.getSecondDivisor());
        myFirstRange.printYears();

        System.out.println("List all of the leap years between " + mySecondRange.getYearOne() + " and " + mySecondRange.getYearTwo());
        mySecondRange.printYears();

        System.out.println("List of all Olympic years between " + myThirdRange.getYearOne() + " and " + myThirdRange.getYearTwo() + " that are divisible by " + myThirdRange.getFirstDivisor());
        myThirdRange.printYears();
    }
}