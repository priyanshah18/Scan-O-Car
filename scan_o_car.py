# Improting Image class from PIL module

def getnumber():
    from PIL import Image
    # Opens a image in RGB mode
    im = Image.open(r"C:\Users\daksh\Desktop\Captured\car.png")

    # Setting the points for cropped image
    left = 180
    top = 365
    right = 340
    bottom = 395

    # Cropped image of above dimension
    # (It will not change orginal image)
    im1 = im.crop((left, top, right, bottom))

    # Shows the image in image viewer
    im1.save(r"C:\Users\daksh\Desktop\Licence Plate\samplesfinal\cropped\car.png")

    import cv2
    from PIL import Image

    im = Image.open(r"C:\Users\daksh\Desktop\Licence Plate\samplesfinal\cropped\car.png")
    img = cv2.imread(r"C:\Users\daksh\Desktop\Licence Plate\samplesfinal\cropped\car.png")
    mser = cv2.MSER_create()

    #Resize the image so that MSER can work better
    img = cv2.resize(img, (img.shape[1]*2, img.shape[0]*2))
    img = img[5:-5,5:-5,:]

    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    vis = img.copy()

    regions = mser.detectRegions(gray)
    hulls = [cv2.convexHull(p.reshape(-1, 1, 2)) for p in regions[0]]
    cv2.polylines(vis, hulls, 1, (0,255,0))

    im.save(r"C:\Users\daksh\Desktop\Licence Plate\samplesfinal\segmented\car.png")


    try:
        from PIL import Image
    except ImportError:
        import Image
    import pytesseract
    pytesseract.pytesseract.tesseract_cmd = r'C:\Program Files\Tesseract-OCR\tesseract.exe'

    def ocr_core(im):
        """
        This function will handle the core OCR processing of images.
        """
        text = pytesseract.image_to_string(Image.open((im)), lang = 'eng')  # We'll use Pillow's Image class to open the image and pytesseract to detect the string in the image
        return text

    value = (ocr_core((r"C:\Users\daksh\Desktop\Licence Plate\samplesfinal\segmented\car.png")))


    def removespace(string):
        return string.replace(" ", "")
    temp1 = removespace(value)
    def removedot(string1):
        return string1.replace(".", "")
    temp2 = removedot(temp1)
    def convertupp(string):
        return string.upper()
    temp3 = convertupp(temp2)
    temp3 = list(temp3)
    #index = temp3.index('H')
    #if(index == 0):
     #  temp3.insert(0, 'M')
    #if(temp3[0] != 'M'):
     #  temp3.insert(0, 'M')

    def alphabet(alpha, i):
        if ((alpha[i] == 'O') or (alpha[i] == 'Q') or (alpha[i] == 'D')):
            alpha[i] = 0
        elif ((alpha[i] == 'I') or (alpha[i] == 'L')):
            alpha[i] = 1
        elif (alpha[i] == 'E'):
            alpha[i] = 3
        elif (alpha[i] == 'A'):
            alpha[i] = 4
        elif (alpha[i] == 'S'):
            alpha[i] = 5
        elif (alpha[i] == 'C'):
            alpha[i] = 6
        elif (alpha[i] == 'T'):
            alpha[i] = 7
        elif (alpha[i] == 'B'):
            alpha[i] = 8
    def numbers(num, j):
        num[j] = int(num[j])
        if (num[j] == 0):
            num[j] = 'Q'
        elif (num[j] == 1):
            num[j] = 'I'
        elif (num[j] == 3):
            num[j] = 'E'
        elif (num[j] == 4):
            num[j] = 'A'
        elif (num[j] == 5):
            num[j] = 'S'
        elif (num[j] == 6):
            num[j] = 'C'
        elif (num[j] == 7):
            num[j] = 'T'
        elif (num[j] == 8):
            num[j] = 'B'

    if(len(temp3) == 10):
        if((temp3[2] >= 'A' and temp3[2] <= 'Z') or (temp3[3] >= 'A' and temp3[3] <= 'Z')):
            alphabet(temp3, 2)
            alphabet(temp3, 3)
        elif(temp3[4].isdigit()):
            numbers(temp3, 4)
        elif(temp3[5].isdigit()):
            numbers(temp3, 5)
        elif((temp3[6] >= 'A' and temp3[6] <= 'Z') or (temp3[7] >= 'A' and temp3[7] <= 'Z') or
             (temp3[8] >= 'A' and temp3[8] <= 'Z') or (temp3[9] >= 'A' and temp3[9] <= 'Z')):
            alphabet(temp3, 6)
            alphabet(temp3, 7)
            alphabet(temp3, 8)
            alphabet(temp3, 9)
    elif(len(temp3) == 9):
        if ((temp3[2] >= 'A' and temp3[2] <= 'Z') or (temp3[3] >= 'A' and temp3[3] <= 'Z')):
            alphabet(temp3, 2)
            alphabet(temp3, 3)
        elif (temp3[4].isdigit()):
            numbers(temp3, 4)
        elif ((temp3[6] >= 'A' and temp3[6] <= 'Z') or (temp3[7] >= 'A' and temp3[7] <= 'Z') or
              ( temp3[8] >= 'A' and temp3[8] <= 'Z') or (temp3[5] >= 'A' and temp3[5] <= 'Z')):
            alphabet(temp3, 6)
            alphabet(temp3, 7)
            alphabet(temp3, 8)
            alphabet(temp3, 5)

    space = ""
    number = space.join(map(str, temp3))

    import pymysql
    conn = pymysql.connect(host="localhost", user="root", passwd="", db="scan-o-car")
    mycursor = conn.cursor()

    sql = "INSERT INTO carnumber(number) VALUES (%s)"
    val = number
    mycursor.execute(sql, val)

    conn.commit()
    conn.close()
    return number
