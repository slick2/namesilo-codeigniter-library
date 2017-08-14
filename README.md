# Namesilo Codeigniter Library

This package is for the connectivity on Namesilo

## Installation

Put `Namesilo.php` and `namesilo.php ` on their respective folders

```
codeigniter/
+-- application/
    +-- config
        +-- namesilo.php
    +-- libraries   
        +-- Namesilo.php
```

## Usage

```
public function example(){
   $this->load->library('namesilo');
   
   $this->namesilo->contact_list();
   
}
   
```

