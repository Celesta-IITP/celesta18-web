from PIL import Image
from resizeimage import resizeimage
import os
con = './1/'
direc = os.listdir(os.path.join(con))
os.chdir(con)
for filename in direc:
    fd_img = open(filename, 'rb')
    img = Image.open(fd_img)
    img = resizeimage.resize_thumbnail(img, [250, 250])
    newName = str(filename).rstrip('.JPG') + str('_thumb.JPG')
    print(newName)
    img.save(str(newName), img.format)
    fd_img.close()