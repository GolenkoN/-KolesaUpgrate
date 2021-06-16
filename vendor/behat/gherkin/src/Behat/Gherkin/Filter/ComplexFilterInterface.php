<<<<<<< HEAD
<?php

/*
 * This file is part of the Behat Gherkin.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Gherkin\Filter;

use Behat\Gherkin\Node\FeatureNode;
use Behat\Gherkin\Node\ScenarioInterface;

/**
 * Filter interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface ComplexFilterInterface extends FeatureFilterInterface
{
    /**
     * Checks if scenario or outline matches specified filter.
     *
     * @param FeatureNode       $feature  Feature node instance
     * @param ScenarioInterface $scenario Scenario or Outline node instance
     *
     * @return Boolean
     */
    public function isScenarioMatch(FeatureNode $feature, ScenarioInterface $scenario);
}
=======
<?php

/*
 * This file is part of the Behat Gherkin.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Gherkin\Filter;

use Behat\Gherkin\Node\FeatureNode;
use Behat\Gherkin\Node\ScenarioInterface;

/**
 * Filter interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface ComplexFilterInterface extends FeatureFilterInterface
{
    /**
     * Checks if scenario or outline matches specified filter.
     *
     * @param FeatureNode       $feature  Feature node instance
     * @param ScenarioInterface $scenario Scenario or Outline node instance
     *
     * @return Boolean
     */
    public function isScenarioMatch(FeatureNode $feature, ScenarioInterface $scenario);
}
>>>>>>> 4a94011bc424b3ff7825ba00a5077911d5cf9227
