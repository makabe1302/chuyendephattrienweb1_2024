<?php
declare(strict_types=1);

require_once ('A.php');
require_once ('B.php');
require_once ('C.php');


class Demo {
     //1
     public function typeAReturnA():A
     {
         echo __FUNCTION__ ."<br>";
         return new A();
     }
     //2
     public function typeBReturnA():B
     {
         echo __FUNCTION__ ."<br>";
         return new A();
     }
     //3
     public function typeCReturnA():C
     {
         echo __FUNCTION__ ."<br>";
         return new A();
     }
     //4
     public function typeIReturnA():I
     {
         echo __FUNCTION__ ."<br>";
         return new A();
     }
     //5
     public function typeNuLLReturnA(): ?A
     {
         echo __FUNCTION__ ."<br>";
         return new A();
     }
     //6
     public function typeAReturnB():A
     {
         echo __FUNCTION__ ."<br>";
         return new B();
     }
     //7
     public function typeBReturnB():B
     {
         echo __FUNCTION__ ."<br>";
         return new B();
     }
     //8
     public function typeCReturnB():C
     {
         echo __FUNCTION__ ."<br>";
         return new B();
     }
     //9
     public function typeIReturnB():I
     {
         echo __FUNCTION__ ."<br>";
         return new B();
     }
     //10
     public function typeNuLLReturnB(): ?B 
     {
         echo __FUNCTION__."<br>";
         return new B();
     }
     //11
     public function typeAReturnC():A
     {
         echo __FUNCTION__ ."<br>";
         return new C();
     }
     //12
     public function typeBReturnC():B
     {
         echo __FUNCTION__ ."<br>";
         return new C();
     }
     //13
     public function typeCReturnC():C
     {
         echo __FUNCTION__ ."<br>";
         return new C();
     }
     //14
     public function typeIReturnC():I
     {
         echo __FUNCTION__ ."<br>";
         return new C();
     }
     //15
     public function typeNuLLReturnC(): ?C
     {
         echo __FUNCTION__ ."<br>";
         return new C();
     }
     //16
     public function typeAReturnI():A
     {
         echo __FUNCTION__ ."<br>";
         return new I();
     }
     //17
     public function typeBReturnI():B
     {
         echo __FUNCTION__ ."<br>";
         return new I();
     }
     //18
     public function typeCReturnI():C
     {
         echo __FUNCTION__ ."<br>";
         return new I();
     }
     //19
     public function typeIReturnI():I
     {
         echo __FUNCTION__ ."<br>";
         return new I();
     }
     //20
     public function typeNuLLReturnI(): ?I
     {
         echo __FUNCTION__ ."<br>";
         return new I();
     }
     //21
     public function typeAReturnNuLL():A
     {
         echo __FUNCTION__."<br>";
         return NULL;
    }
    //22
    public function typeBReturnNuLL():B
    {
            echo __FUNCTION__ ."<br>";
            return NULL;
    }
    //23
    public function typCReturnNuLL():C
    {
            echo __FUNCTION__."<br>";
            return NULL;
    }
    //24
    public function typeIReturnNuLL():I
    {
            echo __FUNCTION__."<br>";
            return NULL;
    }
    //25
    public function typeNuLLReturnNuLL(): ?NULL
    {
            echo __FUNCTION__."<br>";
            return NULL;
    }
    
}


$demo = new Demo();
$demo->typeAReturnA();
$demo->typeAReturnB();
$demo->typeAReturnC();
$demo->typeAReturnI();
$demo->typeAReturnNull();
$demo->typeBReturnA();
$demo->typeBReturnB();
$demo->typeBReturnC();
$demo->typeBReturnI();
$demo->typeBReturnNull();
$demo->typeCReturnA();
$demo->typeCReturnB();
$demo->typeCReturnC();
$demo->typeCReturnI();
$demo->typeCReturnNull();
$demo->typeIReturnA();
$demo->typeIReturnB();
$demo->typeIReturnC();
$demo->typeIReturnI();
$demo->typeIReturnNull();
$demo->typeNullReturnA();
$demo->typeNullReturnB();
$demo->typeNullReturnC();
$demo->typeNullReturnI();
$demo->typeNullReturnNull();

