# Symfony-API

Pour reproduire l'erreur, il suffit de se créer un compte d'abord sur la route /api/users/create en POST avec un email et un mot de passe, ensuite on se login sur la route en post avec /api/login avec pareil l'email en "username" et le mot de passe en "password", on get le token et on va sur la route /api/users/profile en get en mettant le token apres Bearer dans l'entete authorization. Et c'est la qu'on voit l'erreur..
