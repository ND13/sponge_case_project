def spongify(user_string):
    char_count = 0
    spongecase = ''
    acceptable_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    user_string = user_string.upper()

    for i in range(len(user_string)):
        if user_string[i] in acceptable_chars and char_count % 2 == 1:
            spongecase += user_string[i]
            char_count += 1
        elif user_string[i] in acceptable_chars and char_count % 2 == 0:
            spongecase += user_string[i].lower()
            char_count += 1
        else:
            spongecase += user_string[i]

    return spongecase

def main():
    user_string = input("Enter a message to be sponged up: ")
    sponged = spongify(user_string)

    print(sponged)

if __name__ == '__main__':
    main()
