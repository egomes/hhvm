<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 *  from identifier in collection
 */
class FromClause /*implements IFromClause*/ {
  use QueryClause;
  use Node;

  private /*?string*/ $identifier;
  private /*?IExpression*/ $collection;

  /**
   *  from identifier in collection
   */
  public function getIdentifier() /*: string*/ {
    if ($this->identifier === null) {
      throw new \Exception("Identifier is not initialized");
    }
    return $this->identifier;
  }
  /**
   *  from identifier in collection
   */
  public function setIdentifier(/*string*/ $value) /*: this*/ {
    $this->identifier = $value;
    return $this;
  }

  /**
   *  from identifier in collection
   */
  public function getCollection() /*: IExpression*/ {
    if ($this->collection === null) {
      throw new \Exception("Collection is not initialized");
    }
    return $this->collection;
  }
  /**
   *  from identifier in collection
   */
  public function setCollection(/*IExpression*/ $value) /*: this*/ {
    $this->collection = $value;
    return $this;
  }

  /**
   * Returns $visitor->visitFromClause($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitExpression($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitNode($this) if
   */
  public function accept(/*mixed*/ $visitor) /*: mixed*/ {
    if (method_exists($visitor, "visitFromClause")) {
      // UNSAFE
      return $visitor->visitFromClause($this);
    } else if (method_exists($visitor, "visitExpression")) {
      // UNSAFE
      return $visitor->visitExpression($this);
    } else {
      return $visitor->visitNode($this);
    }
  }

  /**
   * Yields a list of nodes that are children of this node.
   * A node has exactly one parent, so doing a depth
   * first traversal of a node graph using getChildren will
   * traverse a spanning tree.
   */
  public function getChildren() /*: Continuation<INode>*/ {
    if ($this->collection !== null) {
      yield $this->collection;
    }
  }
}
}
