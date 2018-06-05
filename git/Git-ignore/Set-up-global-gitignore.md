# Set up  global .gitignore
When these rules are added to the global .gitignore then You don't need to 
specify them anywhere else in the system. For example, You can ignore systemwide 
 IDE helper files like `/nbproject/*`.

## Create the file
`nano ~/.gitignore_global`

## Add these rules

```
`/nbproject/*`
/.vscode/*
/v8-compile-cache-0/*
```

## Tell git to use it
`git config --global core.excludesfile ~/.gitignore_global`
