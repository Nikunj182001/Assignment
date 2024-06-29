<!-- • What Is Object Oriented Programming? -->

Object Oriented Programming is a programming paradigm that represents the concept of objects that have data fields(attributes that describe the object) and associated procedures known as methods.

Objects which are usually instance of classes are used to interact with one another to design applications and computer programs.

<!-- • What Are Properties Of Object Oriented Systems? -->
    Encapsulation
    Polymorphism
    Abstraction
    Inheritence
    Class
    Objects

<!-- • What Is Difference Between Class And Interface? -->   
    Classes can contain variables and methods, or functions that specify how a given data type behaves. An interface is like a template which defines a group of related methods with empty bodies. The implementation of the methods is provided by the class that implements the interface.

<!-- • What Is Overloading? -->
    Function overloading is used to dynamically create properties and methods. These dynamic entities are processed by magic methods which can be used in a class for various action types. Function overloading contains same function name and that function performs different task according to number of arguments.

<!-- • What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with Example -->
    Scope Resolution Operator is a token that allows access to a constant, static property, or static method of a class or one of its parents

    ex:
        class abc
        {
            static $a = 23;
        }
        $object = new abc;
        echo abc::$a;

<!-- • What are the differences between abstract classes and interfaces? -->
    An abstract class can have a mixture of fully implemented (concrete) methods and abstract methods (which are declared but not implemented) and can maintain state through fields. An interface can only declare methods and properties but cannot implement them, and it cannot hold

<!-- • Define Constructor and Destructor? -->
    Constructors are the blueprints for object creation providing values for member functions and member variables. Once the object is initialized, the constructor is automatically called. Destructors are for destroying objects and automatically called at the end of execution

<!-- • How to Load Classes in PHP? -->
    The class will be loaded from its corresponding “.php” file when it comes into use for the first time

<!-- • How to Call Parent Constructor? -->
    In order to run a parent constructor, a call to parent::__construct() within the child constructor is required. If the child does not define a constructor then it may be inherited from the parent class just like a normal class method (if it was not declared as private)

<!-- • Are Parent Constructor Called Implicitly When Create An ObjectOf Class? -->
    Parent constructors are not called implicitly if the child class defines a constructor

<!-- • What Happen, If Constructor Is Defined As Private Or Protected? -->
    If a constructor is declared private, we can't create an object of the class, except within the class. A private constructor is used when we want to limit the way objects of a class are instantiated

<!-- • What are PHP Magic Methods/Functions? List them Write program for Static Keyword in PHP? -->
    Methods that begin with 2 underscores(__) are generally called Magic methods in PHP. These methods names are limited to some list of PHP supported keywords that are reserved. So any function should not be defined with the name of PHP magic methods.

            __construct()
            __destruct()
            __call($fun, $arg)
            __callStatic($fun, $arg)
            __get($property)
            __set($property, $value)
            __isset($content)
            __unset($content)
            __sleep()
            __wakeup()
            __toString()
            __invoke()
            __set_state($array)
            __clone()
            __debugInfo()
            
 <!-- Use of The $this keyword  -->
 The $this keyword refers to the current object, and is only available inside methods.

 