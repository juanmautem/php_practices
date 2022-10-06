
<?php
/*
public class Node {

    private $leftNode;
    private $rightNode;

    public function setLeftNode($node){
       $this->leftNode = $node;
    }
    public function setRightNode($node){
       $this->rightNode = $node;
    }
    public function getLeftNode(){
       return $this->leftNode;
    }
    public function getRightNode(){
       return $this->rightNode;
    }
    public function isLeaf(){
        return $this->leftNode === null && $this->rightNode === null;
    }
}
*/
class TreeNode{
 
    private $data;
    private $left;
    private $right;
 
    public function __construct($data,$left,$right)
    {
 
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
 
    }
 
 
    public function setLeft($left)
    {
        $this->left = $left;
    }
 
    public function getLeft()
    {
        return $this->left;
    }
 
    public function setRight($right)
    {
        $this->right = $right;
    }
 
    public function getRight()
    {
        return $this->right;
    }
 
    public function setData($data)
    {
        $this->data = $data;
    }
 
    public function getData()
    {
        return $this->data;
    }
 
 
 
}
 
class BST{
 
    private $root;
 
    public function __construct($root = null)
    {
        $this->root = new TreeNode($root,"","");
    }
 
    public function getRoot()
    {
        return $this->root;
    }
 
    public function insert($data)
    {
 
        $n = new TreeNode($data,"","");
 
        if($this->root->getData() == null){
            $this->root = $n;
        }else{
 
            $current = $this->root;
 
            while(true){
 
                $parent = $current;
 
                if($data < $current->getData()){
 
                    $current = $current->getLeft();
 
 
                    if($current == null){
 
                        $parent->setLeft($n);
                        break;
 
                    }
 
 
                }else{
 
                    $current = $current->getRight();
 
 
                    if($current == null){
 
                        $parent->setRight($n);
                        break;
 
                    }
 
                }
 
            }
        }
 
    }
 
 
    public function inOrder($data)
    {
        if($data != null){
            $this->inOrder($data->getLeft());
            echo $data->getData();
            echo "<br/>";
            $this->inOrder($data->getRight());
        }
    }
 
    public function preOrder($data)
    {
        if($data != null){
 
            echo $data->getData();
            echo "<br/>";
            $this->inOrder($data->getLeft());
            $this->inOrder($data->getRight());
 
        }
    }
 
    public function postOrder($data)
    {
        if($data != null){
 
            $this->postOrder($data->getLeft());
            $this->postOrder($data->getRight());
            echo $data->getData();
            echo "<br/>";
 
        }
    }
 
 
    public function getMin()
    {
        $current = $this->root;
 
        while($current->getLeft() != null){
            $current = $current->getLeft();
        }
 
        return $current->getData();
 
    }
 
 
    public function getSmallest($node)
    {
        while($node->getLeft() != null){
            $current = $node->getLeft();
        }
 
        return $node->getData();
    }
 
    public function getMax()
    {
        $current = $this->root;
 
        while($current->getRight() != null){
            $current = $current->getRight();
        }
 
        return $current->getData();
 
    }
 
    // Encontrar nodo
    public function find($data)
    {
 
        $current = $this->root;
 
        while ($current != null){
 
            if($current->getData() == $data){
 
                return $current;
 
            }elseif ( $data < $current->getData()){
 
                $current = $current->getLeft();
 
            }else{
 
                $current = $current->getRight();
 
            }
 
        }
 
        return false;
 
    }
 
 
    public function remove($data)
    {
        $this->root = $this->removeNode($this->root , $data);
    }
 
 
         // Eliminar nodo    
    public function removeNode($node , $data)
    {
        if($node == null){
 
            return null;
 
        }
 
 
        if($node->getData() == $data){
 
            if($node->getRight() == null && $node->getLeft() == null){
 
                return null;
 
            }
 
                         // Si no hay nodo izquierdo
            if($node->getLeft() == null){
 
                return $node->getRight();
 
            }
 
                         // Si no hay un nodo correcto
            if($node->getRight() == null){
 
                return $node->getLeft();
 
            }
 
            $tempNode = getSmallest($node->getRight());
            $node->setData( $this->getSmallest($node->getRight()));
            $node->setRight($this->removeNode($node->getRight(),$tempNode->getData()));
            return $node;
 
        }
 
        elseif ($data < $node->getData()){
 
            $node->setLeft($this->removeNode($node->getLeft() , $data));
 
            return $node;
 
        }else{
 
            $node->setRight($this->removeNode($node->getRight() , $data));
 
            return $node;
 
        }
 
    }
 
}
 
$tree = new BST(55);
$tree->insert(23);
$tree->insert(45);
$tree->insert(16);
$tree->insert(37);
$tree->insert(3);
$tree->insert(99);
$tree->insert(22);
 
$tree->inOrder($tree->getRoot());
 
$tree->remove(45);
 
echo "<br/>";
 
$tree->inOrder($tree->getRoot());
 
echo "<br/>";
 
$tree->preOrder($tree->getRoot());
 
echo "<br/>";
 
$tree->postOrder($tree->getRoot());

?>