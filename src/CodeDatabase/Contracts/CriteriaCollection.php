<?php

namespace CodePress\CodeDatabase\Contracts;

use CodePress\CodeDatabase\Contracts\CriteriaInterface;

interface CriteriaCollection
{
    public function addCriteria(CriteriaInterface $criteria);

    public function getCriteriaCollection();

    public function getByCriteria(CriteriaInterface $criteriaInterface);

    public function applyCriteria();
}