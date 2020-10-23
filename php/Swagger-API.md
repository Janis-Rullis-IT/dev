# Swagger-API

## Clear cache after changes

```shell
composer dumpautoload -o
bin/console cache:clear
```

## Debug

### RESTART THE CONTAINER FIRST!

Sometimes the API may crash heavily on it's own and not come back even if the cache is cleared.
Otherwise You may chase wild gooses for an hour (like me just now :smile:) and there's actually wrong :cry:

## Basic

```php
<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\SelectedCell;
use App\Interfaces\IGameRepo;
use App\Service\GameService;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{	
    /**
     * Start the game.
     *
     * @Route("/game", name="start", methods={"POST"})
	 * @SWG\Response(response=404, description="Not found.", @SWG\Schema(type="object", @SWG\Property(property="errors", type="object", example={ "id": "#14 Can not find the game."})))
     */
    public function start(Request $request, GameService $gameService): JsonResponse
    {
        try {
            $resp = $gameService->start(json_decode($request->getContent(), true))->toArray();

            return $this->json($resp, Response::HTTP_OK);
        } catch (\Exception $e) {
            if (method_exists($e, 'getErrors')) {
                return $this->json(['errors' => $e->getErrors()], Response::HTTP_BAD_REQUEST);
            }

            return $this->json(['errors' => [$e->getMessage()]], Response::HTTP_BAD_REQUEST);
        }
    }
}
```
