<?php

namespace Clickbar\Magellan\Database\PostgisFunctions;

class Magellan
{
    use MagellanGeometryAccessorFunctions;
    use MagellanBoundingBoxFunctions;
    use MagellanGeometryProcessingFunctions;
    use MagellanMeasurementFunctions;
    use MagellanOverlayFunctions;
    use MagellanTopologicalRelationshipFunctions;
    use MagellanSpatialReferenceSystemFunctions;
    use MagellanGeometryValidationFunctions;
    use MagellanGeometryConstructorFunctions;
}
