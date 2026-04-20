# Task S1.04

The project focuses on core OOP concepts including classes, objects, inheritance, aggregation, and composition.

## Project Overview

### Level 1: Basics & Inheritance
- **Exercise 1 (Employee):** Implementation of an `Employee` class that evaluates tax obligations based on salary.
- **Exercise 2 (Shapes):** Use of inheritance with a base `Shape` class and specific `Triangle` and `Rectangle` subclasses to calculate areas.

### Level 2: Aggregation & Static Methods
- **Exercise 1 (Poker Dice):** A system to simulate rolling poker dice. It tracks global statistics (total rolls) using static properties and demonstrates **aggregation** through a `DiceCup` class that manages multiple `PokerDie` instances.

### Level 3: Composition & Complex Relationships
- **Exercise 1 (Cinema Catalog):** A complex model representing a cinema chain.
    - **Composition:** The `CinemaChain` class manages the lifecycle of `Cinema` and `Movie` objects.
    - **Bidirectional Aggregation:** Movies and Cinemas reference each other, allowing for advanced data navigation.
    - **Features:** Logic to find the longest movie per cinema and search for unique movie titles by director.

## Technical Specifications

- **Language:** PHP 8.x
- **Standard:** PSR-12 (Coding Style)
- **Concepts used:**
    - Constructor Property Promotion
    - Strict Typing (`declare(strict_types=1)`)
    - Type Hinting & Union Types
    - Static Properties & Methods
    - Multi-byte String Handling (`mb_strlen`) for terminal alignment