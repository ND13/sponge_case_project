def spongify(user_string):
    char_count = 0
    spongecase = ''
    user_string = user_string.upper()

    for i in range(len(user_string)):
        if user_string[i] != ' ':
            if char_count % 2 == 1:
                spongecase += user_string[i]
            elif char_count % 2 == 0:
                spongecase += user_string[i].lower()
        else:
            spongecase += ' '
        char_count += 1

    return spongecase

def main():
    user_string = input("Enter a message to be sponged up: ")
    sponged = spongify(user_string)

    print(sponged)

if __name__ == '__main__':
    main()
