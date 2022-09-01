# detect-pasted-space-or-tab-and-confirm-conv-to-comma.md

https://jsfiddle.net/janis_rullis/frcobhpg/

```js
// Include opreations with delimiters, like replacing one delimiter with another in a string.
class Delimiter {

    /**
     * Get the first used delimiter in the string.
     *
     * @param {string} string - Examples: '1 2 3'; '4   5   6'; '789'.
     * @param {!Object<string,string>} delimiters Example: `{ '\t': 'tab', ' ': 'space' }]`.
     * @returns {?string} - Examples: ' '; 'tab'; null.
     */
    static getUsed(string, delimiters) {
        let usedDelimiter = null;
        let hasDelimiterInString = false;
        let words = [];

        for (const [delimiter, delimiterName] of Object.entries(delimiters)) {
            words = string.split(delimiter);
            hasDelimiterInString = words.length > 1;

            if (!hasDelimiterInString) {
                continue;
            }

            usedDelimiter = delimiter;
        }

        return usedDelimiter;
    }

    /**
     * Ask the client to confirm the replacement
     * of the first detected delimiter with the selected one (default is comma).
     *
     * @param {string} string - Examples: '1 2 3'; '4   5   6'; '789'.
     * @param {!Object<string,string>} [delimiters={ '\t': 'tab', ' ': 'space' }]
     * @param {!Object<string,string>} [replaceWith={ delimiter: ',', name: 'comma' }]
     * @param {string} [confirmationMessage=Values are separated using {usedDelimiterName}. Do You want to replace it with a {replaceWithName}?]
     * @returns {string} - Examples: '1,2,3'; '4,5,6'; '789'.
     */
    static confirmBeforeReplacing(
        string,
        delimiters = {
            '\t': 'tab',
            ' ': 'space'
        },
        replaceWith = {
            delimiter: ',',
            name: 'comma'
        },
        confirmationMessage = `Values are separated using {usedDelimiterName}. Do You want to replace it with a {replaceWithName}?`
    ) {
        const usedDelimiter = Delimiter.getUsed(string, delimiters);
        if (!usedDelimiter) {
            return string;
        }

        const usedDelimiterName = delimiters[usedDelimiter];
        confirmationMessage = confirmationMessage
            .replaceAll('{usedDelimiterName}', usedDelimiterName)
            .replaceAll('{replaceWithName}', replaceWith.name);

        if (!confirm(confirmationMessage)) {
            return string;
        }

        return string.replaceAll(usedDelimiter, replaceWith.delimiter);
    }

    /**
     * The paste event that checks if the pasted string has delimiter that needs to be replaced.
     * @param {*} event 
     */
    static convertToCommaWhenPasting(event) {
        console.log(event);
        event.preventDefault();
        let paste = (event.clipboardData || window.clipboardData).getData('text');
        event.target.value += Delimiter.confirmBeforeReplacing(paste)
    }

    /**
     * Attach the event to the selected element(s) that
     * will ask the client to confirm the replacement of the first
     * detected delimiter with the selected one (default is comma).
     * 
     * @param {string} selector 
     */
    static attachConvertToCommaWhenPasting(selector) {
        let textRuleInputs = document.querySelectorAll(selector);

        // Refresh the paste event list for the actual element list.
        // Otherwise there might be multiple events on 1 item and none for some new one.
        for (const textRuleInput of textRuleInputs) {
            textRuleInput.removeEventListener('paste', Delimiter.convertToCommaWhenPasting);
            textRuleInput.addEventListener('paste', Delimiter.convertToCommaWhenPasting);
        }
    }
}

Delimiter.attachConvertToCommaWhenPasting('#my-input');
```
