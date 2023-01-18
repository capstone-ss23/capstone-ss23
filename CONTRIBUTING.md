# Michigan State University

### Repository Commit Workflow
* Pull from Repository
* Make changes to files within the local repository
* `git add .` (adding `.` means you're adding all files that have changes)
    - You can add specific files through `git add <file name>`
* `git commit -m "<Add commit message here>"` (-m denotes a message, add a few words to describe your changes.)
* `git pull --rebase` to make sure you have the latest changes before you post a PR
* `git switch -c <new-unique-branch-name>` to switch to a new branch
* `git push --set-upstream origin <new-unique-branch-name>` to set the branch to be upstream
* Go to https://github.com/capstone-ss23/capstone-ss23 and you should see a green button that says "Compare & pull request", click this and add a PR description. When you are ready, submit the pull request.
    -   If there is a merge conflict(s), either:
        -   Handle them case-by-case on github.com
        -   `git pull --merge` 
        -   `git pull --rebase`
*   You may recieve comments on your changes on github, to where you can respond to them and possibly make further changes to your code.
*   If your PR needs changes/ammendments: 
    *   Make your changes 
    *   `git add .`
    *   Instead of creating a new commit, you'll amend your changes to the commit you've already created by doing `git commit --amend --no-edit`. If you want to change the commit message, you can run `git commit --amend` which will allow you to change the commit message.
    *   `git pull --rebase`
    *   `git push --force`. Force pushes are usually a dangerous command, but in the case of pushing to a branch that is up for a PR, this should be safe.
    *   Your PR should now be updated, and you can repeat this step until the PR is ready to be merged
* Once you recieve 2 approvals, your PR is now ready to be merged!

