<?php

namespace tests\AppBundle\Repository\DataFixtures;

use AppBundle\Entity\Activity;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadActivityDataForTestFindAllActivitiesForPhases implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $activities[] = (new Activity())->setRetromatId(1)->setPhase((0));
        $activities[] = (new Activity())->setRetromatId(2)->setPhase((1));
        $activities[] = (new Activity())->setRetromatId(3)->setPhase((2));
        $activities[] = (new Activity())->setRetromatId(4)->setPhase((3));
        $activities[] = (new Activity())->setRetromatId(5)->setPhase((4));
        $activities[] = (new Activity())->setRetromatId(6)->setPhase((5));
        $activities[] = (new Activity())->setRetromatId(7)->setPhase((0));
        $activities[] = (new Activity())->setRetromatId(8)->setPhase((1));
        $activities[] = (new Activity())->setRetromatId(9)->setPhase((2));
        $activities[] = (new Activity())->setRetromatId(10)->setPhase((3));
        $activities[] = (new Activity())->setRetromatId(11)->setPhase((4));
        $activities[] = (new Activity())->setRetromatId(12)->setPhase((5));

        foreach ($activities as $activity) {
            $activity->setLanguage('en')->setName('foo')->setSummary('foo')->setDesc('foo');
            $manager->persist($activity);
        }
        $manager->flush();
    }
}